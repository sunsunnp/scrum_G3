<!DOCTYPE html>
<html lang="en">
<head>
  <title>สร้างกิจกรรม</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>
<div class="bootstrap-iso">
    <div class="container">
    <h2>สร้างกิจกรรม</h2>
    <form>
        <div class="form-group">
            <label for="name">ชื่อกิจกรรม:</label>
            <input type="text" class="form-control" id="name_activity" name="name_activity">
        </div>
        <div class="form-group">
            <label for="exampleTextarea">รายละเอียดกิจกรม</label>
            <textarea class="form-control" id="detail_activity" rows="3" name="detail_activity"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="date" class="col-2 col-form-label">วันเริ่มกิจกรรม:</label>
        <div class="col-6">
            <input class="form-control" type="date"  id="start_activity" name="start_activity">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="time" class="col-2 col-form-label">เวลาเริ่มกิจกรรม:</label>
        <div class="col-6">
            <input class="form-control" type="time"  id="time_activity">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="date"  class="col-2 col-form-label">วันสิ้นสุดกิจกรรม:</label>
        <div class="col-6">
            <input class="form-control" type="date"  id="end_activity" name="end_activity">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="time" class="col-2 col-form-label">เวลาสิ้นสุดกิจกรรม:</label>
        <div class="col-6">
            <input class="form-control" type="time"  id="time_activity">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label"  class="col-2 col-form-label">ชั้นปี:</label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 1
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 2
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 3
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 4
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 5
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 6
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 7
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="" id="student_activity" name="student_activity">ชั้นปีที่ 8
        </label>
    </div>
    <div class="form-group">
            <label for="name">ปีการศึกษา:</label>
            <input type="text" class="form-control" id="" name="">
    </div>
    <div class="form-group">
            <label for="name">เทอม:</label>
            <input type="text" class="form-control" id="" name="">
    </div>
    <div class="form-group">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary  ">สร้าง</button>
        </div>
    </div>
</form>
</div>

</body>

</html>


<!-- <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script> -->

