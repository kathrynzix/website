<!-- toolbar.php -->
<div id="toolbar">
  <button id="menuButton">Menu</button>
  <div id="menu">
    <a href="library_of_alternative_timekeeping.php">Library of Alternative Timekeeping</a>
    <a href="estate_sale.php">Estate Sale</a>
    <a href="photo.php">Photo</a>
    <a href="video.php">Video</a>
    <a href="web_art.php">Web Art</a>
    <a href="book_arts.php">Book Arts</a>
    <a href="resume.pdf">Resume</a>
  </div>
</div>

<script>
  // JavaScript for the toolbar
  document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menuButton');
    const menu = document.getElementById('menu');

    menuButton.addEventListener('click', () => {
      menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    });
  });
</script>
