function LinkBuild(a, b){
	if(a==1){
		window.open('https://libsearch.cuny.edu/F?func=find-e&adjacent=N&find_scan_code=SCAN_SUL&request='+b+'&Search=+Search+&local_base=CENTRO');
	} else if(a==2){
		window.open('https://libsearch.cuny.edu/F?func=scan&scan_code=TTL&scan_start='+b+'&local_base=CENTRO');
	} else if(a==3){
		window.open('https://libsearch.cuny.edu/F?func=scan&scan_code=AUT&scan_start='+b+'&local_base=CENTRO');
	} else{
		window.open('https://libsearch.cuny.edu/F?func=scan&scan_code=ISBN&scan_start='+b+'&local_base=CENTRO');
	}
}