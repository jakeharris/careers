document.addEventListener('DOMContentLoaded', function (e) {

  // Thanks @Ludwig! (http://stackoverflow.com/questions/9514179/how-to-find-the-operating-system-version-using-javascript)

  // Determine what operating system the user has
  var nAgt = navigator.userAgent;
  var os = '';
  var clientStrings = [
      {s:'Windows 3.11', r:/Win16/},
      {s:'Windows 95', r:/(Windows 95|Win95|Windows_95)/},
      {s:'Windows ME', r:/(Win 9x 4.90|Windows ME)/},
      {s:'Windows 98', r:/(Windows 98|Win98)/},
      {s:'Windows CE', r:/Windows CE/},
      {s:'Windows 2000', r:/(Windows NT 5.0|Windows 2000)/},
      {s:'Windows XP', r:/(Windows NT 5.1|Windows XP)/},
      {s:'Windows Server 2003', r:/Windows NT 5.2/},
      {s:'Windows Vista', r:/Windows NT 6.0/},
      {s:'Windows 7', r:/(Windows 7|Windows NT 6.1)/},
      {s:'Windows 8.1', r:/(Windows 8.1|Windows NT 6.3)/},
      {s:'Windows 8', r:/(Windows 8|Windows NT 6.2)/},
      {s:'Windows NT 4.0', r:/(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},
      {s:'Windows ME', r:/Windows ME/},
      {s:'Android', r:/Android/},
      {s:'Open BSD', r:/OpenBSD/},
      {s:'Sun OS', r:/SunOS/},
      {s:'Linux', r:/(Linux|X11)/},
      {s:'iOS', r:/(iPhone|iPad|iPod)/},
      {s:'Mac OS X', r:/Mac OS X/},
      {s:'Mac OS', r:/(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},
      {s:'QNX', r:/QNX/},
      {s:'UNIX', r:/UNIX/},
      {s:'BeOS', r:/BeOS/},
      {s:'OS/2', r:/OS\/2/},
      {s:'Search Bot', r:/(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}
  ];
  
  var button = document.getElementById('download-btn'),
      link = document.getElementById('download-link');

  
  for (var id in clientStrings) {
      var cs = clientStrings[id];
      if (cs.r.test(nAgt)) {
          os = cs.s;
          break;
      }
  }

  var osVersion = '';

  if (/Windows/.test(os)) {
      osVersion = /Windows (.*)/.exec(os)[1];
      os = 'Windows';
  }

  switch (os) {
      case 'Mac OS X':
          osVersion = /Mac OS X (10[\.\_\d]+)/.exec(nAgt)[1];
          break;

      case 'Android':
          osVersion = /Android ([\.\_\d]+)/.exec(nAgt)[1];
          break;

      case 'iOS':
          osVersion = /OS (\d+)_(\d+)_?(\d+)?/.exec(nVer);
          osVersion = osVersion[1] + '.' + osVersion[2] + '.' + (osVersion[3] | 0);
          break;
  } 

  var url = '';
  
  if (os !== 'Android' && os !== 'iOS')
    url = 'http://www.careerfairplus.com/';
  else if (os === 'Android') 
    url = 'https://play.google.com/store/apps/details?id=com.careerfairplus.au_al';
  else
    url = 'https://itunes.apple.com/us/app/auburn-career-fair-plus/id691680982?mt=8';
    
  if(button) button.href = url
  if(link) link.href = url
})