//defines available frames
availableFrames = [
	{name:'Brandt Gate', src:'/img/frames/cfvg/BrandGate.png'},
    {name:'Generic', src:'/img/frames/cfvg/CrayElemental.png'},
    {name:'Dark States', src:'/img/frames/cfvg/DarkStates.png'},
    {name:'Dragon Empire', src:'/img/frames/cfvg/DragonEmpire.png'},
    {name:'Keter Sanctuary', src:'/img/frames/cfvg/KeterSanctuary.png'},
	{name:'Stoicheia', src:'/img/frames/cfvg/Stoicheia.png'},
];

//disables/enables the "Load Frame Version" button
document.querySelector('#loadFrameVersion').disabled = false;
//defines process for loading this version, if applicable
document.querySelector('#loadFrameVersion').onclick = LoadSNAPVersion;
//loads available frames
loadFramePack();