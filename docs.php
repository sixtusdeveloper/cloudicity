<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./CSS/styles.css" />
    <link rel="stylesheet" href="./CSS/utilities.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" cotent="Web based cloud hosting company for everyone" >
    <title>Cloudify | Cloud hosting Docs</title>
    <script
      src="https://kit.fontawesome.com/7c5a9b010c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Nav -->
    <div class="navbar">
      <div class="container flex"><a href="index.php">
        <h1 class="logo">
          <img
            src="./images/cloudicity-logo-1.png"
            class="logo-image"
            alt="An image of Logo"
          />
        </h1></a>

        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="features.php">Features</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="docs.php" class="active">Docs</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Head -->
    <section class="docs-head bg-primary py-4">
      <div class="container grid">
        <div>
          <h1 class="xl">Docs</h1>
          <p class="lead">
            Learn how to work on the Cloudicity platform. All you need to know
            about this platform would be discused in this article.
          </p>

          <button class="about_main_btn" onclick="fetch_user_url()">Read more</button>
        </div>
        <img src="./images/cloud-img.png" alt="" />
      </div>
    </section>

    <!-- Main   -->
    <section class="docs-main my-2">
      <div class="container grid">
        <div class="card bg-light p-3">
          <h3 class="my-2">Essentials</h3>
          <nav>
            <ul>
              <li><a class="text-primary" href="#">Instroduction</a></li>
              <li><a href="#">About Beroski</a></li>
              <li><a href="#">Installation</a></li>
            </ul>
          </nav>

          <h3 class="my-2">Deployments</h3>
          <nav>
            <ul>
              <li><a href="#">Setting up a container</a></li>
              <li><a href="#">Using the CLI</a></li>
              <li><a href="#">Managing resources</a></li>
              <li><a href="#">Upgrade & Downgrade</a></li>
            </ul>
          </nav>
        </div>

        <div class="card">
          <h2>Introduction</h2>
          <p>
            Install and test our traditionally designed work environment plaform
            with your device, available on all devices. Just a click and it's
            downloaded to your device, install and make the necessary
            configuration for a smooth experience. Multiple way to install, for
            developers, you might find the it more handy using our CLI built in
            tools. It's will install all the necessary and standalone built in
            tools including the latest packages along with them. However, this
            method would be more friendly to an experienced developer as it's
            require other configurations before the final setup.
          </p>
          <div class="alert alert-success">
            <i class="fas fa-info fa-2x"></i>
            Install using the CLI built in tool or download directly through the
            button to your computer and continue the process following the
            instructions. Use the code below.
          </div>

          <h3>Make sure your security setup is disabled.</h3>
          <p>
            Make sure you turn off your security permissions as this may not
            allowed the installation properly, with a popup notification "your
            installation can't be completed, file contain harmful threats or
            virus."
            <b style="color: lightseagreen;" ;>
              compatibility is also required.
            </b>
          </p>
          <a href="features.html" class="btn bnt-primary">Install CLI</a>

          <h3>Requirements</h3>
          <ul>
            <li>Windows 10, Mac OSX, Linux</li>
            <li>Node.js v12 or higher</li>
          </ul>

          <h3>Install</h3>
          <p>Mac (Homebrew)</p>
          <pre><code>$ brew install Beroski-CLI</code></pre>
          <p>NPM</p>
          <pre><code>$ npm install Beroski-CLI</code></pre>
          <p>YARN</p>
          <pre><code>$ yarn install Beroski-CLI</code></pre>
        </div>
      </div>
    </section>

   <?php include_once 'footer.php'; ?>

    <script src="./JS/main.js"></script>
  </body>
</html>
