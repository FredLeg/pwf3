{include file="partials/header.tpl"}

    <div class="blog-header">
      <h1 class="blog-title">{$title}</h1>
      <p class="lead blog-description">{$description}</p>
    </div>


    <div class="row">
      <section class="article-content clearfix">
        <div class>
          <div id="nteam">
            <div class="container">

                {if !empty($students)}
                  {foreach $students as $student}
                    <div class="col-md-3">
                     <div class="member">
                       <div class="details">
                           <img class="img-thumbnail" alt="avatar" src="{$url_trombino}{$student->getPathPhoto()}" height="170px">
                         </a>
                         <a href="#"><h2 class="title">{$student->firstname}</h2></a>
                       </div>
                     </div>
                    </div>
                 {/foreach}
                 {/if}

            </div>
          </div>
        </div>
      </section>

  </div><!-- /.row -->

      <!--NAV PAGE-->

      <div class="row">

         <div class="col-md-12">
            <ul class="pager pagenav">
              <li class="previous">
                <a href="/previous" rel="prev"><span class="icon-chevron-left"></span>Précédent</a>
              </li>

              <li class="next">
                <a href="/next" rel="next"><span class="icon-chevron-right"></span>Suivant</a>
              </li>
            </ul>
          </div>
      </div>
      <!--END NAV PAGE-->













{include file="partials/footer.tpl"}
