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
                             <img class="img-thumbnail" alt="avatar" src="{$url_photos}/{$student->photo}" height="170px">
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

  </div>
{include file="partials/footer.tpl"}
