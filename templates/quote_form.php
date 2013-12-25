
<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

                    <title>C$50 Finance: Get Quote</title>
        
        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/"><img alt="C$50 Finance" src="/img/logo.gif"/></a>
            </div>

            <div id="middle">
                  <form action="quote.php" method="post">
                      <fieldset>
                          <div class="form-group">
                              <input autofocus class="form-control" name="symbol" placeholder="Symbol" type="text"/>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-default">Get Quote</button>
                          </div>
                      </fieldset>
                  </form>
                  <!----
                  <table>
                     <?php

                         foreach ($positions as $position)
                         {
                             print("<tr>");
                             print("A share of " . $stock["name"]);
                             print(" (" . $stock["symbol"] . ")");
                             print(" Costs:" . $stock["price"]);
                             print("</tr>");
                         }

                     ?>
                  </table>
                  -->
            </div>
        </div>

    </body>

</html>

