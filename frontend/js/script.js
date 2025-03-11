  // Get tab buttons
  const loginTabBtn = document.getElementById('loginTabBtn');
  const signupTabBtn = document.getElementById('signupTabBtn');
  
  // Get form containers
  const loginForm = document.getElementById('loginForm');
  const signupForm = document.getElementById('signupForm');
  
  // Get link buttons
  const showSignupBtn = document.getElementById('showSignupBtn');
  const showLoginBtn = document.getElementById('showLoginBtn');
  
  // Function to show login form
  function showLogin() {
      loginForm.classList.remove('hidden');
      signupForm.classList.add('hidden');
      loginTabBtn.classList.add('border-blue-600', 'text-blue-600');
      loginTabBtn.classList.remove('border-gray-200', 'text-gray-500');
      signupTabBtn.classList.add('border-gray-200', 'text-gray-500');
      signupTabBtn.classList.remove('border-blue-600', 'text-blue-600');
  }
  
  // Function to show signup form
  function showSignup() {
      signupForm.classList.remove('hidden');
      loginForm.classList.add('hidden');
      signupTabBtn.classList.add('border-blue-600', 'text-blue-600');
      signupTabBtn.classList.remove('border-gray-200', 'text-gray-500');
      loginTabBtn.classList.add('border-gray-200', 'text-gray-500');
      loginTabBtn.classList.remove('border-blue-600', 'text-blue-600');
  }
  
  // Add event listeners
  loginTabBtn.addEventListener('click', showLogin);
  signupTabBtn.addEventListener('click', showSignup);
  showSignupBtn.addEventListener('click', showSignup);
  showLoginBtn.addEventListener('click', showLogin);


  //Drug registration form
  document.addEventListener('DOMContentLoaded', function() {
    const registerDrugBtn = document.getElementById('registerDrugBtn');
    const registerSection = document.getElementById('registerSection');
    
    registerDrugBtn.addEventListener('click', function() {
        registerSection.classList.remove('hidden');
        registerSection.scrollIntoView({ behavior: 'smooth' });
    });
    
    const cancelButton = document.getElementById('cancelRegistration');
    cancelButton.addEventListener('click', function() {
        registerSection.classList.add('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});


//Camera
// Add event listener for DOM content loaded
document.addEventListener('DOMContentLoaded', function() {
    const scanButton = document.getElementById('scanQrButton');
    
    if (scanButton) {
        scanButton.addEventListener('click', initQRScanner);
    }
});

// Separate function for QR scanner initialization
function initQRScanner() {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
            .then(function(stream) {
                createScannerModal();
                setupVideoStream(stream);
            });
    } else {
        alert('Sorry, your browser does not support camera access');
    }
}

function createScannerModal() {
    const scannerModal = `
        <div class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
            <div class="bg-white p-4 rounded-lg w-full max-w-md">
                <div class="relative">
                    <video id="qr-video" class="w-full"></video>
                    <div class="absolute inset-0 border-2 border-blue-500 opacity-50"></div>
                </div>
                <button id="close-scanner" class="mt-4 w-full bg-red-500 text-white px-4 py-2 rounded">
                    Close Scanner
                </button>
            </div>
        </div>
    `;
    document.body.insertAdjacentHTML('beforeend', scannerModal);
}

function setupVideoStream(stream) {
    const video = document.getElementById('qr-video');
    video.srcObject = stream;
    video.play();
    
    const qrScanner = new QrScanner(video, result => {
        alert('QR Code detected: ' + result);
        stopScanner(qrScanner, stream);
    });
    
    qrScanner.start();
    
    document.getElementById('close-scanner').addEventListener('click', () => {
        stopScanner(qrScanner, stream);
    });
}

function stopScanner(qrScanner, stream) {
    qrScanner.stop();
    stream.getTracks().forEach(track => track.stop());
    document.querySelector('.fixed').remove();
}
