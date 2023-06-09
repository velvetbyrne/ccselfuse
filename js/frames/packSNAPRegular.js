//defines available frames
availableFrames = [
	{name:'Normal Frame', src:'/img/frames/snap/regular.png'},
	{name:'No Ability', src:'/img/frames/snap/noab.png'},];

//disables/enables the "Load Frame Version" button
document.querySelector('#loadFrameVersion').disabled = false;
//defines process for loading this version, if applicable
document.querySelector('#loadFrameVersion').onclick = LoadSNAPVersion;
//loads available frames
loadFramePack();