<form>
  <select name="select1" id="select1">
    <option value="10">10</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
  </select>
</form>

<?php
// if (isset($_POST['submit'])) {
//   $select1 = $_POST['select1'];
//   echo $select1;
// }
?>
<script>
  $(document).ready(function(){
    $('#select1').change(function(){
      var nilai = $(this).val();
      $('p').php('nilai yang dipilih adalah ' + nilai);
    });
  });
</script>
