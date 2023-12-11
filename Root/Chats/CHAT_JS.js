// Use JavaScript for UI interactivity and message sending

// Function to send message
function sendMessage() {
    // Get message content from the input field
    var message = document.querySelector('.type_msg').value;
  
    // Use AJAX or Fetch API to send the message to the server (PHP)
  
    // Example using jQuery AJAX
    $.ajax({
      type: 'POST',
      url: 'send_message.php',
      data: { message: message },
      success: function(response) {
        // Handle success response
        console.log('Message sent:', response);
  
        // Clear input field after sending message
        document.querySelector('.type_msg').value = '';
      },
      error: function(error) {
        // Handle error response
        console.error('Failed to send message:', error);
      }
    });
  }
  
  // Function to fetch messages
  function fetchMessages() {
    // Use AJAX or Fetch API to retrieve messages from the server (PHP)
  
    // Example using jQuery AJAX
    $.ajax({
      type: 'GET',
      url: 'fetch_messages.php',
      success: function(messages) {
        // Handle success response, display messages in the chat box
  
        // Example: Add messages to the chat container
        var chatContainer = document.querySelector('.msg_card_body');
        chatContainer.innerHTML = messages;
      },
      error: function(error) {
        // Handle error response
        console.error('Failed to fetch messages:', error);
      }
    });
  }
  
  // Call fetchMessages function to load messages on page load
  fetchMessages();
  