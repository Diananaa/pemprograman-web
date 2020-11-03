<div class="badan">

<form action="" method="post" id="form-input">
		<div class="row">
			<label>Nama</label>
			<div class="col-wrap">
				<input type="text" name="nama" value=" "/>
			</div>
		</div>
    <div class="row">
      <label>Email</label>
      <div class="col-wrap">
        <input type="text" name="email" value=" "/>
      </div>
    </div>
    <div class="row">
      <label>Website</label>
      <div class="col-wrap">
        <input type="text" name="website" value=" "/>
      </div>
    </div> <br>
    <div class="row">
      <input class="offset button" type="submit" name="submit" value="Submit"/>
    </div>
  </form>
</div>
<script type="text/javascript">
$('#form-input').submit(function(e){
  e.preventDefault();
  data = {};
  $('input[name!="submit"]').each(function(i, elm) {
    data[$(elm).attr('name')] = elm.value;
  })
  
  data_json = JSON.stringify(data);
  alert(data_json);
  // Send data_json via AJAX...
})
</script>    



</div>
   

