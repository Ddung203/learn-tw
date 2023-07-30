async function accessAndDisplayData() {
  const targetUrl = 'https://savetext.net/ddung203';
  const corsProxyUrl = 'https://cors-anywhere.herokuapp.com/';
  try {
    const response = await fetch(corsProxyUrl + targetUrl);
    const data = await response.text();

    const textArea = document.getElementById('w3review');
    textArea.value = data;
  } catch (error) {
    console.error('Error:', error);
  }
}
setInterval(accessAndDisplayData, 10000);

/*
<textarea id="w3review" name="w3review" rows="3" cols="40"></textarea>
*/
