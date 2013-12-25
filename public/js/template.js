// once/ the window has loaded
$(window).load(function() {
    // triggle event
    load_template();
    
});

function load_template() {
	//alert("1");
	$('#txta_es').val(bp_template['1.es']);
   $('#txta_ds').val(bp_template['2.ds']);
   $('#txta_cn').val(bp_template['3.cn']);
   $('#txta_ct').val(bp_template['4.ct']);
   $('#txta_pd').val(bp_template['5.pd']);
   $('#txta_sa').val(bp_template['6.sa']);
   $('#txta_ma').val(bp_template['7.ma']);
   $('#txta_sf').val(bp_template['8.sf']);
   $('#txta_ip').val(bp_template['9.ip']);
   $('#txta_rc').val(bp_template['10.rc']);
   $('#txta_rb').val(bp_template['11.rb']);
   $('#txta_rd').val(bp_template['12.rd']);
   $('#txta_sm').val(bp_template['13.sm']);	
   $('#txta_fi').val(bp_template['14.fi']);
   $('#txta_mf').val(bp_template['15.mf']);
	$('#txta_ot').val(bp_template['16.ot']);
}
