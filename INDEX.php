<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action = "project_data.php" method = "get">
        <fieldset id = "sect1">
            <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
            <label for = "sid">รหัสนักศึกษา</label><input type = "text" name = "sid">
            <label for = "fname">ชื่อ</label><input type = "text" name = "fname">
            <label for = "lname">นามสกุล</label><input type = "text" name = "lname">
            <label for = "program">สาขาวิชา</label>
            <select name = "program">
                <option value = "1">วิทยาการคอมพิวเตอร์</option>
                <option value = "2">เทคโนโลยีสารสนเทศ</option>
                <option value = "3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                <option value = "4">ภูมิสารสนเทศ</option>
                <option value = "5">คอมพิวเตอร์ศึกษา</option>
            </select> <br>
            <label for = "faculty">คณะ</label>
            <select name = "faculty">
            <option value = "1">วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>>
            <option value = "2">ครุศาสตร์</option>><br>
            <label for = "std_year">ชั้นปี</label>
            <input type = "radio" name="std_year" value="1"><label>ปี 1</label>
            <input type = "radio" name="std_year" value="2"><label>ปี 2</label>
            <input type = "radio" name="std_year" value="3"><label>ปี 3</label>
            <input type = "radio" name="std_year" value="4"><label>ปี 4</label>
            <input type = "radio" name="std_year" value="5"><label>ปี 5</label><br>
        </fieldset>

        <fieldset id="sect2">
                <legend>ส่วนที่ 2 ข้อมูลโครงการ</legend>
                <label for = "prj_name_th">ชื่อโครงการ(ภาษาไทย)</label><input type = "textarea" name = "prj_name_th">
                <label for = "prj_name_en">ชื่อโครงการ(ภาษาอังกฤษ)</label><input type = "textarea" name = "prj_name_en">
                <label for = "prj_type">ประเภทโครงการ</label>
                <select name = "prj_type">
                        <option value="1">เกม</option>
                        <option value="2">โปรแกรมเดสก์ทอป</option>
                        <option value="3">โปรแกรมมือถือ</option>
            </select><br>
            <label for = "prj_tool">เครื่องมือทีใช้ในการค้นหา</label>
            <select name = "prj_tool">
            <input type = "checkbox" name = "prj_tool" value="HTML" ><label>HTML</label>
            <input type = "checkbox" name = "prj_tool" value="CSS" ><label>CSS</label>
            <input type = "checkbox" name = "prj_tool" value="JAVASCRIPT"><label>JAVASCRIPT</label>
            <input type = "checkbox" name = "prj_tool" value="BOOTSTRAP"><label>BOOTSTRAP</label>
            <input type = "checkbox" name = "prj_tool" value="MATERIAL DESIGN"><label>MATERIAL DESIGN</label>
            <input type = "checkbox" name = "prj_tool" value="ANGULAR"><label>ANGULAR</label>
            <input type = "checkbox" name = "prj_tool" value="REACT"><label>REACT</label>
            <input type = "checkbox" name = "prj_tool" value="PHP"><label>PHP</label>
            <input type = "checkbox" name = "prj_tool" value="MYSQL"><label>MYSQL</label><br>
                  <label>อาจารย์ที่ปรึกษา</label>
                  <select name="prj_advisor"> 
                   
                        <option value="1">อ.บุญเรือน พฤษ์ศศิธร</option>
                        <option value="2">อ.ทิพย์วรรณ ฟูเฟื่อง</option>
            </select>
                    </fieldset>
                    <input type="SUBMIT" value="GO">



                

   
   
   
   
   
   
   
   
   
    </form>
        


</html>