var swiper = new Swiper(".mySwiper",{//สร้างตัวแปรชื่อ swiper เพื่อเก็บข้อมูลของ Swiper object
                                    //เรียกใช้ฟังก์ชัน new Swiper เพื่อสร้าง object ใหม่ของ Swiper
  effect : "coverflow",//เพื่อให้ปรับแต่งการหมุนได้
  grabCursor : true,//เปลี่ยนเมาส์เป็นมือเวลาเลื่อนสไลด์
  centeredSlides : true,//จัดภาพสไลด์ให้ตรงกลาง(สำหรับเวลากำหนด slidesPerView เป็นเลขคู่)
  slidesPerView : "auto",//แสดงภาพสไลด์ทีละกี่ภาพ โดยคำนวณให้พอดีกับพื้นที่
  coverflowEffect : {//ปรับแต่ง effect แบบ coverflow(เทคนิคการแสดงภาพแบบ 3 มิติที่จำลองการพลิกใบไพ่ หรือการเลื่อนชั้นวางของ)
    rotate : 50,//องศาการหมุนของภาพสไลด์
    stretch : 0,//ระยะห่างระหว่างไฟล์ ยิ่งค่ามากยิ่งเข้าใกล้กัน
    depth :100,//ความลึกแบบ 3 มิติของภาพสไลด์ 100 pixel ภาพสไลด์ที่อยู่ด้านหน้าจะแสดงผลใหญ่กว่าภาพสไลด์ที่อยู่ด้านหลัง
    modifier :1,//เลื่อนแต่ละครั้งครั้งต้องการให้ภาพหมุนกี่ครั้ง(สัมพันธ์กับ rotate )
    slideShadows : true,//แสดงเงาของภาพสไลด์
  },
  pagination: {
    el: ".swiper-pagination",//สร้างจุดแสดงสถานะของสไลด์(bullet) ไปยัง element ที่มี class "swiper-pagination"
  },
  loop: true, //ทำให้ภาพลูปวนเลื่อยๆ
});






