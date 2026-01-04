/**
 * Google Apps Script for Google Sheets Integration
 * 
 * SETUP INSTRUCTIONS:
 * 1. Create a new Google Sheet with the following column headers in Row 1:
 *    Timestamp | Name | Email | Phone | Company | Message
 * 
 * 2. Open Google Apps Script Editor:
 *    - Click "Extensions" > "Apps Script"
 * 
 * 3. Delete any existing code and paste this entire script
 * 
 * 4. Click "Deploy" > "New deployment"
 *    - Select type: "Web app"
 *    - Execute as: "Me"
 *    - Who has access: "Anyone"
 *    - Click "Deploy"
 * 
 * 5. Copy the Web App URL
 * 
 * 6. In WordPress admin, go to:
 *    Settings > Agency Pro
 *    Paste the Web App URL and save
 * 
 * IMPORTANT: Make sure to authorize the script when prompted
 */

// Main function to handle POST requests
function doPost(e) {
  try {
    // Parse the JSON data from the request
    const data = JSON.parse(e.postData.contents);
    
    // Get the active spreadsheet
    const sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
    
    // Prepare the row data
    const rowData = [
      new Date(), // Timestamp
      data.name || '',
      data.email || '',
      data.phone || '',
      data.company || '',
      data.message || ''
    ];
    
    // Append the data to the sheet
    sheet.appendRow(rowData);
    
    // Format the timestamp column
    const lastRow = sheet.getLastRow();
    const timestampCell = sheet.getRange(lastRow, 1);
    timestampCell.setNumberFormat('yyyy-mm-dd hh:mm:ss');
    
    // Auto-resize columns for better readability
    sheet.autoResizeColumns(1, 6);
    
    // Return success response
    return ContentService.createTextOutput(
      JSON.stringify({
        status: 'success',
        message: 'Data saved successfully',
        row: lastRow
      })
    ).setMimeType(ContentService.MimeType.JSON);
    
  } catch (error) {
    // Return error response
    return ContentService.createTextOutput(
      JSON.stringify({
        status: 'error',
        message: error.toString()
      })
    ).setMimeType(ContentService.MimeType.JSON);
  }
}

// Test function to verify the setup (optional)
function doGet(e) {
  return ContentService.createTextOutput(
    JSON.stringify({
      status: 'success',
      message: 'Google Apps Script is running correctly!',
      timestamp: new Date()
    })
  ).setMimeType(ContentService.MimeType.JSON);
}

// Function to setup the sheet with headers (run this once)
function setupSheet() {
  const sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  
  // Check if headers already exist
  if (sheet.getLastRow() === 0) {
    const headers = ['Timestamp', 'Name', 'Email', 'Phone', 'Company', 'Message'];
    sheet.appendRow(headers);
    
    // Format headers
    const headerRange = sheet.getRange(1, 1, 1, headers.length);
    headerRange.setFontWeight('bold');
    headerRange.setBackground('#4285f4');
    headerRange.setFontColor('#ffffff');
    
    // Freeze header row
    sheet.setFrozenRows(1);
    
    // Auto-resize columns
    sheet.autoResizeColumns(1, headers.length);
    
    Logger.log('Sheet setup completed successfully!');
  } else {
    Logger.log('Headers already exist. No action taken.');
  }
}

// Function to send email notification (optional enhancement)
function sendEmailNotification(data) {
  const recipient = 'your-email@example.com'; // Change this to your email
  const subject = 'New Contact Form Submission';
  const body = `
    New contact form submission received:
    
    Name: ${data.name}
    Email: ${data.email}
    Phone: ${data.phone}
    Company: ${data.company}
    Message: ${data.message}
    
    Timestamp: ${new Date()}
  `;
  
  try {
    MailApp.sendEmail(recipient, subject, body);
  } catch (error) {
    Logger.log('Email notification error: ' + error.toString());
  }
}

// Enhanced doPost with email notification (optional)
function doPostWithEmail(e) {
  try {
    const data = JSON.parse(e.postData.contents);
    const sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
    
    const rowData = [
      new Date(),
      data.name || '',
      data.email || '',
      data.phone || '',
      data.company || '',
      data.message || ''
    ];
    
    sheet.appendRow(rowData);
    
    const lastRow = sheet.getLastRow();
    const timestampCell = sheet.getRange(lastRow, 1);
    timestampCell.setNumberFormat('yyyy-mm-dd hh:mm:ss');
    
    sheet.autoResizeColumns(1, 6);
    
    // Send email notification (uncomment to enable)
    // sendEmailNotification(data);
    
    return ContentService.createTextOutput(
      JSON.stringify({
        status: 'success',
        message: 'Data saved successfully',
        row: lastRow
      })
    ).setMimeType(ContentService.MimeType.JSON);
    
  } catch (error) {
    return ContentService.createTextOutput(
      JSON.stringify({
        status: 'error',
        message: error.toString()
      })
    ).setMimeType(ContentService.MimeType.JSON);
  }
}
