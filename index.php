<?php

/**
 * Theme Functions
 * @package Lauren
 */
get_header();


/**
 * last updated: 6/7/21
 * 
 * TODOS: 
 * ************
 * POST PAGE
 * DYNAMIC CONTENT & TITLES
 * DROPDOWN MENU FOR HOME
 * BLOG ARCHIVE
 *  |-> IMPORT STRUCTURE AND STYLES FROM LOCUS
 * SINGLE POST 
 * GALLERY PAGE
 *  |-> functionality via plugin
 * CONTACT FORM
 *  |-> functionality via plugin
 * DYNAMIC FOOTER
 * 
 * PAGINATION
 */


?>



<!-- Work -->
<article id="work" class="panel secondary">
  <div class="image">
    <img src="images/pic02.jpg" alt="" data-position="center center" />
  </div>
  <div class="content">
    <ul class="actions animated spinX">
      <li><a href="#" class="button small back">Back</a></li>
    </ul>
    <div class="inner">
      <header>
        <h2>Work</h2>
        <p>
          Magna feugiat lorem ipsum dolor<br />
          veroeros sed adipiscing
        </p>
      </header>
      <p>
        Lorem ipsum dolor sit amet, magna etiam adipiscing elit. Vivamus
        in quam eu turpis venenatis euismod eget ac velit. Magna pharetra
        eleifend urna quis laoreet. Nullam quis urna iaculis metus ornare
        accumsan. Sed nunc lacus, lobortis nec ante sit amet.
      </p>
      <p>
        Lorem ipsum dolor sit amet, magna etiam adipiscing elit. Vivamus
        in quam eu turpis venenatis euismod eget ac velit. Magna pharetra
        eleifend urna quis laoreet. Nullam quis urna iaculis metus ornare
        accumsan. Sed nunc lacus, lobortis nec ante sit amet.
      </p>
      <p>
        Lorem ipsum dolor sit amet, magna etiam adipiscing elit. Vivamus
        in quam eu turpis venenatis euismod eget ac velit. Magna pharetra
        eleifend urna quis laoreet. Nullam quis urna iaculis metus ornare
        accumsan. Sed nunc lacus, lobortis nec ante sit amet.
      </p>
      <p>
        Vitae quis magna. Sed condimentum dui sed nunc dapibus dignissim.
        Sed at arcu gravida, vehicula massa ut, consectetur urna. Morbi eu
        venenatis turpis. In tincidunt pharetra etiam veroeros.
      </p>
    </div>
  </div>
</article>

<!-- About -->
<article id="about" class="panel secondary">
  <div class="image">
    <img src="images/pic03.jpg" alt="" data-position="center center" />
  </div>
  <div class="content">
    <ul class="actions animated spinX">
      <li><a href="#" class="button small back">Back</a></li>
    </ul>
    <div class="inner">
      <header>
        <h2>About</h2>
        <p>
          Magna feugiat lorem ipsum dolor<br />
          veroeros sed adipiscing
        </p>
      </header>
      <p>
        Lorem ipsum dolor sit amet, magna etiam adipiscing elit. Vivamus
        in quam eu turpis venenatis euismod eget ac velit. Magna pharetra
        eleifend urna quis laoreet. Nullam quis urna iaculis metus ornare
        accumsan. Sed nunc lacus, lobortis nec ante sit amet.
      </p>
      <p>
        Vitae quis magna. Sed condimentum dui sed nunc dapibus dignissim.
        Sed at arcu gravida, vehicula massa ut, consectetur urna. Morbi eu
        venenatis turpis. In tincidunt pharetra etiam veroeros.
      </p>
    </div>
  </div>
</article>

<!-- Contact -->
<article id="contact" class="panel secondary">
  <div class="image">
    <img src="images/pic04.jpg" alt="" data-position="bottom center" />
  </div>
  <div class="content">
    <ul class="actions animated spinX">
      <li><a href="#" class="button small back">Back</a></li>
    </ul>
    <div class="inner">
      <header>
        <h2>Contact</h2>
      </header>
      <form method="post" action="#">
        <div class="fields">
          <div class="field half">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="field half">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="5"></textarea>
          </div>
        </div>
        <ul class="actions">
          <li><a href="" class="button submit">Send Message</a></li>
        </ul>
      </form>
    </div>
  </div>
</article>





<?php
get_footer();
