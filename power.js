function powerUp(){
	var state = false;
	var initiaLimit = 0;
	var FinaLimit = 1000000;
	var NextLimit = 0;
	while(!state){
		initiaLimit++;
		if(initiaLimit==FinaLimit){
			alert('Limite alcanzado se duplicara a' + (FinaLimit*2) );
			FinaLimit = FinaLimit * 2;
		}else{
			alert('Sigue, sigue y sigue...');
		}
	}
}