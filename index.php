<!-- ����������� ���������� jQuery -->
<script src="jquery.min.js"></script>
<!-- ����������� jQuery ������� Masked Input -->
<script src="jquery.maskedinput.min.js"></script>



<!--HTML �������, ������� ����� ����� ����� ����� ����������� ������  -->
<input  id="phone" type="text">	
<script>
//��� jQuery, ��������������� ����� ��� ����� �������� �������� input
//1. ����� �������� ��������,  ����� ��� �������� ����� �������� ���������...
$(function(){
  //2. �������� �������, � �������� ���������� �������� �����
  $("#phone").mask("8(999) 999-9999");
});
</script>