<?php include('common/header.php'); ?>
<?php include('common/nav.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i>扣款查詢</h1>
          <p>扣款查詢一時間</p>
          <select class="form-control" size="1" name="reader_id">
            <option value="">請選擇</option>
            <option value="B827EB5B8CBA">社區球場A 一 A1 近藍 </option>
            <option value="B827EBE400F8">社區球場A 一 A2 遠藍</option>
            <option value="B827EB307F46">社區球場二 一 遠藍 </option>
            <option value="B827EB3F6053">社區球場二 一 近排女</option>
            <option value="B827EBCDFEF2">社區球場二 一 遠排 </option>
            <option value="B827EB83001F">社區球場二 一 近藍</option>
            <option value="B827EB8F928D">棒、足球場A 一 棒、足球場A</option>
            <option value="B827EBDD78DD">綜合球場二 一 1-5 </option>
            <option value="B827EB6EF962">綜合球場二 一 2-1 </option>
            <option value="B827EB5B8CBA">綜合球場二 一 3-3 </option>
            <option value="B827EBE400F8">綜合球場二 一 4-6 </option>
            <option value="B827EB307F46">綜合球場二 一 5-2 </option>
            <option value="B827EB3F6053">綜合球場二 一 6-4 </option>
            <option value="B827EBCDFEF2">社區球場 一 B1-遠網   </option>
            <option value="B827EB83001F">社區球場 一 B2-近網 </option>
            <option value="B827EB8F928D">體育館旁網球場 一 1 </option>
            <option value="B827EBDD78DD">體育館旁網球場 一 2 </option>
            <option value="B827EB6EF962">棒、足球場 一 B </option>
            <option value="B827EB5B8CBA">綜合球場C 一 網F </option>
            <option value="B827EBE400F8">綜合球場C 一 網C </option>
            <option value="B827EB307F46">綜合球場C 一 網E </option>
            <option value="B827EB3F6053">綜合球場C 一 網D </option>
            <option value="B827EBCDFEF2">綜合球場B 一 網球B </option>
            <option value="B827EB83001F">綜合球場B 一 網球A  </option>
            <option value="B827EB8F928D">綜合球場B 一 籃球C </option>
            <option value="B827EBDD78DD">綜合球場B 一 籃球D  </option>
            <option value="B827EB6EF962">綜合球場B 一 籃球E  </option>
            <option value="B827EB5B8CBA">綜合球場B 一 籃球F  </option>
            <option value="B827EBE400F8">綜合球場A 一 藍A </option>
            <option value="B827EB307F46">綜合球場A 一 藍B </option>
            <option value="B827EB3F6053">綜合球場A 一 排A </option>
            <option value="B827EBCDFEF2">綜合球場A 一 排B </option>
            <option value="B827EB83001F">綜合球場A 一 排C </option>
            <option value="B827EB8F928D">綜合球場A 一 排D </option>
            <option value="B827EBDD78DD">綜合球場A 一 排E </option>
            <option value="B827EB6EF962">綜合球場A 一 排F </option>
          </select><br><br>


    開始時間 : <input type="time" name="usr_time">  ~  結束時間 : <input type="time" name="usr_time"><br><br><br>


  <button type="button" class="btn btn-outline-primary">查詢</button>　<button type="button" class="btn btn-outline-secondary">重設</button>　<button type="button" class="btn btn-outline-success">球場扣款紀錄匯出</button>
  
 


    <div class=" container">
  <h2></h2>
  <p></p>            
  <table class=" table table-hover">
    <thead>
      <tr><br><br>
        <th>建立日期</th>
        <th>卡號</th>
        <th>金額</th>
        <th>狀態</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2019‎/‎2‎/‎23‎ 07:00~16:00</td>
        <td>Doe</td>
        <td>john</td>
        <td>20<td>
      </tr>
      <tr>
        <td>2019‎/‎2‎/‎23‎ 07:00~16:00</td>
        <td>Moe</td>
        <td>mary</td>
        <td>100</td>
      </tr>
      <tr>
        <td>2019‎/‎2‎/‎23‎ 07:00~16:00</td>
        <td>Dooley</td>
        <td>july</td>
        <td>550</td>
      </tr>
    </tbody>
  </table>
</div>
<!--  admin_list.php End -->
<?php include('common/footer.php'); ?>