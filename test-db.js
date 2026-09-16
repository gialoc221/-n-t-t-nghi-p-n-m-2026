const db = require('./db');

async function checkConnection() {
  try {
    const [rows] = await db.query('SELECT 1 + 1 AS result');
    console.log('✅ Kết nối MySQL XAMPP thành công rực rỡ!');
    console.log('Kết quả kiểm tra:', rows[0].result);
    process.exit(0);
  } catch (error) {
    console.error('❌ Lỗi kết nối CSDL:', error.message);
    process.exit(1);
  }
}

checkConnection();
