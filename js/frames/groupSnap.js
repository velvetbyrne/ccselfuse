loadFramePacks([
	{name:'SNAP Regular', value:'SNAPRegular'},
])

var LoadSNAPVersion = async () => {
    notify('This is still being tested', 1);

    await resetCardIrregularities();

    card.version = 'SNAPRegular';
    card.artBounds = {x:0.7573, y:0.8848, width:0.188, height:0.0733};
	autoFitArt();
	//set symbol bounds
	card.setSymbolBounds = {x:-1, y:-1, width:0.12, height:0.0410, vertical:'center', horizontal: 'right'};
	resetSetSymbol();
	//watermark bounds
	card.watermarkBounds = {x:0.5, y:0.7762, width:0.75, height:0.2305};
	resetWatermark();
	//text
	loadTextOptions({
		title: {name:'Title', text:'', color:'white', oneLine:true, x:0.056, y:0.8855, width:0.890, height:0.0205, oneLine:true, font:'ultimatum', size:0.075, align:'center', manaPrefix:'fab', outlineWidth:0.010},
		rules: {name:'Rules Text', text:'', color:'white', x:0.066, y:0.60, width:0.860, height:0.25, font:'newsb', manaPrefix:'fab', lineSpacing:0.2, align:'center', outlineWidth:0.002},
		cost: {name:'Cost', text:'', color:'white', x:0.0475, y:0.0380, width:0.0934, height:0.0790, size:0.0900, font:'ultimatum', oneLine:true, align:'center', manaPrefix:'fab', outline: '#1f2d77', outlineWidth:0.008, outlineColor:'#1d1d31'},
		power: {name:'Power', text:'', color:'white', x:0.8425, y:0.0380, width:0.0934, height:0.0790, size:0.0900, font:'ultimatum', oneLine:true, align:'center', manaPrefix:'fab', outline:'#a6441c', outlineWidth:0.008, outlineColor:'#402825'}
	});
	//bottom info
	await loadBottomInfo({
		regular: {text:'Illust. {elemidinfo-artist} \u00a9 MARVEL {elemidinfo-year}', x:0.055, y:2125/2200, width:0.9, height:0.0143, oneLine:true, font:'newsb', size:0.0200, color:'white', align:'center'},
		extra: {text:'', y:2020/2100, height:0.0134, oneLine:true, font:'gothammedium', size:0.0134, color:'white', align:'center'},
	});
}