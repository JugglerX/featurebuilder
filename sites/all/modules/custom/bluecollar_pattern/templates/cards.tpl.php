<h1>Cards</h1>
<div class="row">
  <div class="small-12 column">

    <!-- User Contributions -->
    <?php if (isset ($data ['user_contributions'])) : ?>
      <?php if (isset($data['total_user_contributions']) && $data['total_user_contributions'] > 0) : ?>
        <div class="row contributions-head extra-margin-top">
          <div class="small-12 column">
            <div class="contributions-border contributions-border-tunnel">
              <h2 class="contributions-title"><?php print t('Employee Contributions') ?></h2>
              <div class="content-anchor-container">
                <div class="content-anchors">
                  <?php foreach ($data['user_contributions'] as $key => $val): ?>
                    <?php if (isset($val['paging'] ['totalResults']) && $val['paging'] ['totalResults'] > 0) : ?>
                      <a href="#<?php print $key ?>"
                         class="content-anchor-item content-anchor-type-<?php print $key ?>">
                        <div class="content-count"><?php print $val['paging']['totalResults']; ?></div>
                        <div
                          class="content-type"><?php print $val['displayTitleVariations']['displayTitleContentAnchor']; ?></div>
                      </a>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php foreach ($data['user_contributions'] as $key => $val): ?>
        <?php if (isset($val['paging'] ['totalResults']) && $val['paging'] ['totalResults'] > 0) : ?>
          <div class="row cards" id="<?php print $key ?>">
            <div class="cards-header small-12 column">
              <h2 class="title">
                <?php print $val['displayTitleVariations']['displayTitleCardHeader'] ?>
                <span> (<a
                    href="<?php print  $data ['lang_prefix'] . '/company/' . $data ['company']->companyCode . '/' . $key ?>"><?php print $val['paging'] ['totalResults']; ?></a>)</span>
              </h2>
            </div>
            <?php foreach ($val ['searchResults'] as $item): ?>
              <?php print theme('adsk_core_profile_card', $item); ?>
            <?php endforeach; ?>

            <div class="cards-footer small-12 column">
              <a class="active-vis see-all see-all-<?php print $key ?>"
                 href="<?php print $data ['lang_prefix'] . '/company/' . $data ['company']->companyCode . '/' . $key ?>"><?php print $val['displayTitleVariations']['displayTitleSeeAllLink'] ?></a>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

    <?php endif; ?>
  </div>
</div>

<h2>Card</h2>
<hr>
<h3>Card Fixed</h3>
<div class="cards row">
  <div class="card card--simplecontent card--bio card--fixed">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
</div>

<h3>Card Masonry</h3>
<p>Masonry allows floating items of different heights, and the gaps are "filled in". This is a popular approach to displaying mixed content cards.</p>
<a class="pattern__library"><i class="fa fa-bolt" aria-hidden="true"></i> <strong>Library: </strong>
  http://masonry.desandro.com/</a>

<div class="cards cards--masonry row">
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D in a 2d Environment</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Using Vector Smart Graphics to Display Multiple Items on a Grid</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">lskdfja;slfja asdflkjasf</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">lskdfja;slfja asdflkjasf</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
  <div class="card card--simplecontent card--bio card--fixed card--masonry">

    <div class="card__inner">
      <div class="card__header">
        <h3><a href="https://knowledge-local.autodesk.com/search-result/caas/simplecontent/content/sfdsfasf.html">Grading Civil 3D</a></h3>
      </div>
      <div class="card__dateline">
        <h5>Nov 03 2016</h5>
      </div>
      <div class="card__description--small">
        <p>Grading cannot be accomplished directly from Civil 3D Alignments. &nbsp;One can grade only from Feature
          Lines. &nbsp;However, a Feature Line can be extracted from an Alignment with an associated profile, either
          surface profile or design profile. &nbsp; Sometimes&nbsp;editing elevations is easier using the profile editor
          and this technique will make that possible.</p>
      </div>
      <div class="card__media">
        <img src="//akn-aknsite-article-thumbnails.s3.amazonaws.com/0a19dd68-2244-485e-99e3-57404771fb3e.jpeg">
      </div>
      <div class="card__author">
        <div class="author-avatar">
          <img src="https://api.autodesk.com/content/identity/1.0.2118.388524.198/Content/images/icons/user_X120.png">
        </div>
        <span class="author-name"><a href="/profile/HLY38VVUNIXPN"> </a></span>
        <span class="author-jobtitle"></span>
        <span class="author-company"></span>
      </div>
      <div class="card__footer">
        <p>sdf | Article</p>
      </div>
    </div>

  </div>
</div>

<script type="application/javascript">
  jQuery('.cards--masonry').masonry({
    itemSelector: '.card--masonry',
    columnWidth: 320
  });
</script>