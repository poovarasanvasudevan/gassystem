CREATE TABLE cache_cr_image(
  id INT AUTO_INCREMENT PRIMARY KEY ,
  checklistfk INT,
  resultvalue VARCHAR(10000),
  isupdated BOOL DEFAULT FALSE ,
  created DATETIME DEFAULT current_timestamp
)