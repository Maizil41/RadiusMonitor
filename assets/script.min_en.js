$("#btn-qris").click(function(){$("#qr-qris").modal("show")}),
$("#btn-bca").click(function(){$("#qr-bca").modal("show")}),
$("#btn-jenius").click(function(){$("#qr-jenius").modal("show")}),
$("#btn-dana").click(function(){$("#qr-dana").modal("show")}),
$("#btn-ovo").click(function(){$("#qr-ovo").modal("show")}),
$("#btn-linkaja").click(function(){$("#qr-linkaja").modal("show")}),
$("#btn-gopay").click(function(){$("#qr-gopay").modal("show")}),
$("#btn-shopeepay").click(function(){$("#qr-shopeepay").modal("show")}),
$("#btn-paypal").click(function(){$("#qr-paypal").modal("show")});

function SalinAku(TextToCopy) {
	var TempText = document.createElement("input");
	TempText.value = TextToCopy;
	
	prompt("Do you need personal support or haven't found the right solution for your problem? , Please copy information below manually", TempText.value);
	/* Notifikasi */
	/* alert("Teks disalin: " + TempText.value); */
}