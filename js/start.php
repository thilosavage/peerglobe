<script>

function baa() {
	this.ta = 'la';
	this.ba = 'ba';
	this.swap = function() {
		this.ta = this.ba;
	}
		
}

	
var m = new baa();

m.swap();


</script>