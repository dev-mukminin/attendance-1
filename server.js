const express = require('express');
const fs = require('fs');
const multer = require('multer');
const cors = require('cors');
const path = require('path');

const app = express();
const PORT = 80;

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use('/img', express.static(path.join(__dirname, 'public/img')));

// Upload config
const storage = multer.diskStorage({
  destination: (req, file, cb) => cb(null, 'public/img'),
  filename: (req, file, cb) => cb(null, Date.now() + '-' + file.originalname)
});
const upload = multer({ storage });

// Get data
app.get('/data/dekanat,json', (req, res) => {
  const data = JSON.parse(fs.readFileSync('./data/dekanat.json'));
  res.json(data);
});

// Update specific entry
app.post('/data/dekanat/:id', upload.single('foto'), (req, res) => {
  let data = JSON.parse(fs.readFileSync('./data/dekanat.json'));
  const index = data.findIndex(d => d.id === parseInt(req.params.id));
  if (index === -1) return res.status(404).send('Data not found');

  const { jabatan, bidang, nama, status, alasan } = req.body;
  data[index] = {
    ...data[index],
    jabatan,
    bidang,
    nama,
    status,
    alasan,
    foto: req.file ? req.file.filename : data[index].foto
  };

  fs.writeFileSync('./data/dekanat.json', JSON.stringify(data, null, 2));
  res.send({ message: 'Updated successfully', data: data[index] });
});

app.listen(80, () => {
  console.log(`Server running at http://localhost:${80}`);
});

// ================================
// const express = require('express');
// const fs = require('fs');
// const path = require('path');
// const cors = require('cors');
// const bodyParser = require('body-parser');

// const app = express();
// const PORT = 3000;

// app.use(cors());
// app.use(bodyParser.json());
// app.use(express.static('public'));

// // Load JSON data
// const dataPath = path.join(__dirname, 'data.json');

// function loadData() {
//   return JSON.parse(fs.readFileSync(dataPath, 'utf-8'));
// }

// function saveData(data) {
//   fs.writeFileSync(dataPath, JSON.stringify(data, null, 2));
// }

// // GET all
// app.get('http://localhost/attendance/data/dekanat.json/${id}', (req, res) => {
//   const data = loadData();
//   res.json(data);
// });

// // POST new
// app.post('http://localhost/attendance/data/dekanat.json/${id}', (req, res) => {
//   const data = loadData();
//   const newEntry = req.body;
//   newEntry.id = Date.now();
//   data.push(newEntry);
//   saveData(data);
//   res.json({ success: true });
// });

// // PUT update
// app.put('http://localhost/attendance/data/dekanat.json/${id}', (req, res) => {
//   let data = loadData();
//   const id = parseInt(req.params.id);
//   data = data.map(item => (item.id === id ? { ...item, ...req.body } : item));
//   saveData(data);
//   res.json({ success: true });
// });

// // DELETE
// app.delete('http://localhost/attendance/data/dekanat.json:id', (req, res) => {
//   let data = loadData();
//   const id = parseInt(req.params.id);
//   data = data.filter(item => item.id !== id);
//   saveData(data);
//   res.json({ success: true });
// });

// app.listen(PORT, () => console.log(`Server running at http://localhost:${PORT}`));

