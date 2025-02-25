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