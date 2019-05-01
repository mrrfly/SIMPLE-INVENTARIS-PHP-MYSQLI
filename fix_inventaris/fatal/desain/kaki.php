<script type="text/javascript">
	function lihat()
	{
	    var password = document.getElementById('password'),
	        button = document.getElementsByTagName('button')[0];

	    if(button.textContent === 'Lihat Password'){
	      password.setAttribute('type', 'text');
	      button.textContent = 'Sembunyikan';
	    }else{
	      password.setAttribute('type', 'password');
	      button.textContent = 'Lihat Password';
	    }
	    return false;
  	}
</script>

<!-- plugins:js -->
<script src="../vendors/js/vendor.bundle.base.js"></script>
<script src="../vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="../js/off-canvas.js"></script>
<script src="../js/hoverable-collapse.js"></script>
<script src="../js/template.js"></script>
<script src="../js/settings.js"></script>
<script src="../js/todolist.js"></script>
<!-- endinject -->

</body>
</html>
