<script type="text/javascript">
$('#provinsi').bind("change keyup focus input propertychange", function(event) {
  base_url = "<?php echo site_url('kabupaten/json/');?>";
  json_url = base_url + '/' + $('#provinsi').find(":selected").val();
  
  $.getJSON(json_url, function(data) {
    $('#kabupaten').empty();
    $('#kabupaten').append($('<option></option>').attr('value', '').text('All'));
    $.each(data, function(key, val) {
      $('#kabupaten').append($('<option></option>').attr('value', key).text(val));
    });
  });
});

$('#kabupaten').bind("change keyup focus input propertychange", function(event) {
  base_url = "<?php echo site_url('kecamatan/json/');?>";
  json_url = base_url + '/' + $('#kabupaten').find(":selected").val();
  
  $.getJSON(json_url, function(data) {
    $('#kecamatan').empty();
    $('#kecamatan').append($('<option></option>').attr('value', '').text('All'));
    $.each(data, function(key, val) {
      $('#kecamatan').append($('<option></option>').attr('value', key).text(val));
    });
  });
});

$('#kecamatan').bind("change keyup focus input propertychange", function(event) {
  base_url = "<?php echo site_url('kelurahan/json/');?>";
  json_url = base_url + '/' + $('#kecamatan').find(":selected").val();
  
  $.getJSON(json_url, function(data) {
    $('#kelurahan').empty();
    $('#kelurahan').append($('<option></option>').attr('value', '').text('All'));
    $.each(data, function(key, val) {
      $('#kelurahan').append($('<option></option>').attr('value', key).text(val));
    });
  });
});
</script>