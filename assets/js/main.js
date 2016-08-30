imgs = ["images/img_01","images/img_02","images/img_03","images/img_04","images/img_05","images/img_06","images/img_07","images/img_08","images/img_09","images/img_10"]

for(var i = 0 ;i<imgs.length;i++){
	var images = imgs[i]
	$('#slider').append('<img src="'+imgs[i]+'">')
}

