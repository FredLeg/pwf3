                <div class="row">
                    <div class="col-lg-12">

                        {if !empty($isPost) && !empty($success)}

                            <div class="alert alert-success" role="success">{t}Success {$action}{/t}</div>
                            {assign var=redirect value="{$HTTP_ROOT}admin/{$entity_name}"}
                            {Utils::redirectJS($redirect, 0)}

                        {else}


                            {if isset($table)}

                                {$table}

                            {/if}


                            {if isset($form) && empty($success)}

                                <a href="{$back_link}" class="btn btn-default">{t}Back{/t}</a>
                                <hr>
                                {if !empty($errors)}
                                    <div class="alert alert-danger" role="danger">{t}Failed{/t}</div>
                                {/if}
                                {$form}

                            {/if}

                        {/if}

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
