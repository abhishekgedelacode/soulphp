<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />

    <title>soulelement.com | what is your soul element</title>
    <style>
      body {
        width: 100%;
        height: 100vh;
      }
      header {
        position: sticky;
        left: 0;
        top: 0vh;
        z-index: 1;
      }
      footer {
        position: sticky;
        left: 0;
        bottom: 0vh;
      }
      #final {
        display: none;
      }
    </style>
  </head>
  <body>
    <script>
      const name = prompt("what is your name ? ", "Guest");
    </script>
    <div class="container-fluid p-0 col-sm-12">
      <header class="container-fluid p-0 bg-dark">
        <h1
          id="headding"
          class="container-fluid text-capitalize font-weight-bold text-center text-white bg-dark p-2"
        >
          what is your soul element ?
        </h1>
        <p class="text-center p-0 m-0">
          <small class="text-info text-center font-weight-bold p-0 m-0"
            >AbhiShekGedelaCode</small
          >
        </p>
      </header>
      <main class="container-fluid p-4 px-5 col-sm-12 text-center">
        <p class="alert alert-info">
          This is a great chance to know your soul element. We will ask you a
          few questions on regular basis to get an idea about your soul element.
        </p>
        <form action="">
          <div class="container-fluid col-sm-12 p-2 text-center">
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q1. What three best words describe your personality ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q1o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q1"
                      id="q1o1"
                      class="form-check-input opt"
                      value="20"
                    />
                    Fun, Playful, and Friendly
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q1o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q1"
                      id="q1o2"
                      class="form-check-input opt"
                      value="40"
                    />
                    Creative, Decisive, and Clever
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q1o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q1"
                      id="q1o3"
                      class="form-check-input opt"
                      value="30"
                    />
                    Chill, Easy Going, and Laid Back
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q1o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q1"
                      id="q1o4"
                      class="form-check-input opt"
                      value="10"
                    />
                    Passionate, Emotional, and Protective
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q2. Which of these Animals do you like the most ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q2o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q2"
                      id="q2o1"
                      class="form-check-input opt"
                      value="40"
                    />
                    Dogs! They're so adorable and loyal
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q2o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q2"
                      id="q2o2"
                      class="form-check-input opt"
                      value="10"
                    />
                    I really love horses. They're incredibly gracious and
                    beautiful
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q2o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q2"
                      id="q2o3"
                      class="form-check-input opt"
                      value="20"
                    />
                    Butterflies! They're truly fascinating
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q2o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q2"
                      id="q2o4"
                      class="form-check-input opt"
                      value="30"
                    />
                    Dolphins! They're so smart and friendly
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q3. Which Color combo do you like the most ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q3o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q3"
                      id="q3o1"
                      class="form-check-input opt"
                      value="40"
                    />
                    Black and Brown, Baby !
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q3o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q3"
                      id="q3o2"
                      class="form-check-input opt"
                      value="30"
                    />
                    Nothing beats Shades of Blue and Green together
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q3o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q3"
                      id="q3o3"
                      class="form-check-input opt"
                      value="10"
                    />
                    Red and Orange, of course!
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q3o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q3"
                      id="q3o4"
                      class="form-check-input opt"
                      value="20"
                    />
                    Green and Purple is a killer combo!
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q4. What is your Favourite Movie Genre ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q4o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q4"
                      id="q4o1"
                      class="form-check-input opt"
                      value="30"
                    />
                    Thriller, Mystery, Horror, whatever keeps me on the edge of
                    my seat
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q4o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q4"
                      id="q4o2"
                      class="form-check-input opt"
                      value="20"
                    />
                    Probably Comedies or Action movies. I like good fun
                    entertainment
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q4o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q4"
                      id="q4o3"
                      class="form-check-input opt"
                      value="10"
                    />
                    I need Adventure movies and Romantic films to sweep me off
                    feet
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q3o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q3"
                      id="q3o4"
                      class="form-check-input opt"
                      value="40"
                    />
                    Nothing better than a touching Drama or an Educational
                    documentry
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q5. How many Friends do you have ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q5o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q5"
                      id="q5o1"
                      class="form-check-input opt"
                      value="10"
                    />
                    I've got a few different groups with a couple of people in
                    each
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q5o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q5"
                      id="q5o2"
                      class="form-check-input opt"
                      value="30"
                    />
                    About 5 to 10 that I consider my Pals
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q5o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q5"
                      id="q5o3"
                      class="form-check-input opt"
                      value="40"
                    />
                    Probably just 2 or 3 close friends
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q5o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q5"
                      id="q5o4"
                      class="form-check-input opt"
                      value="20"
                    />
                    I have a nice group of truely wonderful friends
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q6. Which of the Music genres do you like more then others ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q6o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q6"
                      id="q6o1"
                      class="form-check-input opt"
                      value="20"
                    />
                    Can't go wrong with some nice soft rock
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q6o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q6"
                      id="q6o2"
                      class="form-check-input opt"
                      value="10"
                    />
                    Heavy metal all the way !
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q6o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q6"
                      id="q6o3"
                      class="form-check-input opt"
                      value="40"
                    />
                    Classical music is all I need
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q6o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q6"
                      id="q6o4"
                      class="form-check-input opt"
                      value="30"
                    />
                    Just anything that's popular today. I love pretty much all
                    the latest hits
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q7. Which Magical Charm would like to have ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q7o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q7"
                      id="q7o1"
                      class="form-check-input opt"
                      value="20"
                    />
                    Something to make me completely free or extremely powerful
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q7o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q7"
                      id="q7o2"
                      class="form-check-input opt"
                      value="30"
                    />
                    Probably invisbility or immortality
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q7o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q7"
                      id="q7o3"
                      class="form-check-input opt"
                      value="10"
                    />
                    I want something that would bring me more attention and love
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q7o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q7"
                      id="q7o4"
                      class="form-check-input opt"
                      value="40"
                    />
                    I'd have to say wisdom or a unique skill of some sort
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q8. Let's hope this scenario won't ever happen to you. But If
                some you love died. How would you handle it ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q8o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q8"
                      id="q8o1"
                      class="form-check-input opt"
                      value="10"
                    />
                    I'd definitely grieve and cry for a very long time
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q8o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q8"
                      id="q8o2"
                      class="form-check-input opt"
                      value="40"
                    />
                    It would br hard but I'd try to accept that they're gone
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q8o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q8"
                      id="q8o3"
                      class="form-check-input opt"
                      value="20"
                    />
                    I'd try to remember all the good times we had together and
                    focus on the positive to make the pain go away
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q8o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q8"
                      id="q8o4"
                      class="form-check-input opt"
                      value="30"
                    />
                    I'd give it some time to sink in and let myself feel all
                    emotions that would come withh it
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q9. If you had 1 Million Dollars, What would you do with it ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q9o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q9"
                      id="q9o1"
                      class="form-check-input opt"
                      value="20"
                    />
                    I'd donate it to a charity. A lot of people need this money
                    way more than I do.
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q9o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q9"
                      id="q9o2"
                      class="form-check-input opt"
                      value="40"
                    />
                    I'd save it, of course
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q9o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q9"
                      id="q9o3"
                      class="form-check-input opt"
                      value="10"
                    />
                    Oh, I'd spend it all with pleasure
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q9o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q9"
                      id="q9o4"
                      class="form-check-input opt"
                      value="30"
                    />
                    I'd give half the money to my family and use the other half
                    for a good cause
                  </label>
                </div>
              </div>
            </div>
            <div class="card m-3 mx-5">
              <div class="card-header text-left pl-5">
                Q10. How would you describe your Life ?
              </div>
              <div class="card-body text-left">
                <div class="form-check pl-5">
                  <label for="q10o1" class="form-check-label">
                    <input
                      type="radio"
                      name="q10"
                      id="q10o1"
                      class="form-check-input opt"
                      value="40"
                    />
                    Probably just a big spotlight of attention, and I don't mind
                    it at all
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q10o2" class="form-check-label">
                    <input
                      type="radio"
                      name="q10"
                      id="q10o2"
                      class="form-check-input opt"
                      value="30"
                    />
                    Full of fun and positive vibes and even a little flirty at
                    times
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q10o3" class="form-check-label">
                    <input
                      type="radio"
                      name="q10"
                      id="q10o3"
                      class="form-check-input opt"
                      value="20"
                    />
                    Hmm, Emotionally well-rounded yealt, that describes it
                    alright
                  </label>
                </div>
                <div class="form-check pl-5">
                  <label for="q10o4" class="form-check-label">
                    <input
                      type="radio"
                      name="q10"
                      id="q10o4"
                      class="form-check-input opt"
                      value="10"
                    />
                    May be a bit modest but filled with great love, and that's
                    all that matter
                  </label>
                </div>
              </div>
            </div>
            <div id="final" class="container p-0 m-2 show fade text-center">
              <div class="card">
                <div class="card-header bg-danger text-white">
                  <h1 id="soulid" class="text-capitalize font-weight-bold"></h1>
                </div>
                <div class="card-body bg-info text-dark">
                  <p id="charid" class="text-capitalize font-weight-bold"></p>
                </div>
                <div class="card-footer bg-danger text-white">
                  <h1 id="nameid" class="text-capitalize font-weight-bold"></h1>
                </div>
              </div>
            </div>
            <div class="container px-4">
              <input
                type="submit"
                class="container btn btn-outline-success btn-block font-weight-bold"
                value="Explore Your Soul Element"
                onclick="return validate()"
              />
            </div>
          </div>
        </form>
      </main>
      <footer class="container-fluid p-0 bg-dark text-center">
        <div class="container p-2 text-center text-warning">
          copyrights &copy;
          <script>
            const d = new Date();
            document.write(d.getFullYear());
          </script>
        </div>
        
      </footer>
    </div>

    <script src="./main.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
