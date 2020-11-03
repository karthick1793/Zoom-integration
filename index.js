ZoomMtg.setZoomJSLib('https://source.zoom.us/1.8.1/lib', '/av'); 

const zoomMeeting = document.getElementById("zmmtg-root");

var signature='TEJTS0ZUQVVUbDIwQmJEdms1dzVIdy44NzE2NTU3ODExMi4xNjA0MzkxODk0MDAwLjEuQnhtLzlzbWpMM1pQai9PQk5nMXYvSUNoM0I4aWNRQUJQYlJlODdYZmFFaz0';
var meetingNumber='87165578112';
var userName='karthickraja';
var apiKey='LBSKFTAUTl20BbDvk5w5Hw';
var userEmail='karthickraja@macappstudio.com'
var password='12345678';
        
const meetConfig = {
	apiKey: apiKey,
	meetingNumber: meetingNumber,
	leaveUrl: 'https://sarvaapp.com/Dashboard/adminDashboard/',
	userName: userName,
	passWord: password,
	role: 1 // 1 for host
};



// prepare required files
//ZoomMtg.setZoomJSLib('https://source.zoom.us/1.8.1/lib', '/av');
ZoomMtg.preLoadWasm();
ZoomMtg.prepareJssdk();

function startLive(){
    debugger;
    getSignature(meetConfig);
}
getSignature(meetConfig);
function getSignature(meetConfig) {
	// make a request for a signature
	debugger;
			// call the init method with meeting settings
			ZoomMtg.init({
				leaveUrl: meetConfig.leaveUrl,
				isSupportAV: true,
				isSupportChat: true,
				// on success, call the join method
				success: (success) => {
				    console.log(success);
					ZoomMtg.join({
						// pass your signature response in the join method
						signature: signature,
						apiKey: meetConfig.apiKey,
						meetingNumber: meetConfig.meetingNumber,
						userName: meetConfig.userName,
						password: meetConfig.passWord,
                        success: (success) => {
                            debugger;
                        console.log(success)
                        },
                        error: (error) => {
                            debugger;
                        console.log(error)
                        }
					})		
				}
			})
	
}