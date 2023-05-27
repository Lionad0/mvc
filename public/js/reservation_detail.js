  // RESERVATION PAGE - DETAIL
  const copyButton = document.getElementById('copyLink');
  copyButton.addEventListener('click', function(){
      const copiedLink = document.getElementById('reserveLink');
      copiedLink.select();
      copiedLink.setSelectionRange(0, 100);

      navigator.clipboard.writeText(copiedLink.value);

      copyButton.innerText = 'Copied';
      
  })