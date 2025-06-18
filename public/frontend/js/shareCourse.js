const degreeInput = document.getElementById('degreeInput');
    const degreeDropdown = document.getElementById('degreeDropdown');
    const linkInput = document.getElementById('linkInput');
    const copyButton = document.getElementById('copyButton');

    // Toggle dropdown visibility on input click
    degreeInput.addEventListener('click', () => {
      degreeDropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
      if (!degreeDropdown.contains(event.target) && event.target !== degreeInput) {
        degreeDropdown.classList.add('hidden');
      }
    });

    // Set selected degree on click
    const degreeLinks = degreeDropdown.querySelectorAll('a');
    degreeLinks.forEach((link) => {
      link.addEventListener('click', (event) => {
        event.preventDefault();
        degreeInput.value = link.textContent;
        degreeDropdown.classList.add('hidden');
      });
    });

    // Copy link when copy button is clicked
    copyButton.addEventListener('click', () => {
      linkInput.select();
      document.execCommand('copy');
      alert('Link copied to clipboard');
    });