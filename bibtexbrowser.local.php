<?php
define('BIBLIOGRAPHYSECTIONS','MySectionStyles');
define('BIBTEXBROWSER_BIBTEX_LINKS',false);
define('BIBTEXBROWSER_DOI_LINKS',false);
define('BIBTEXBROWSER_GSID_LINKS',false);
//define('BIBTEXBROWSER_LAYOUT','list');
define('ABBRV_TYPE','none');
define('BIBTEXBROWSER_BIBTEX_VIEW', 'reconstructed');

function MySectionStyles()
{
return
  array(
  // Books
    array(
      'query' => array(Q_TYPE=>'book|proceedings'),
      'title' => __('<h2 class="bibcategory">Books</h2>')
    ),
  // Book chapters
    array(
      'query' => array(Q_TYPE=>'incollection|inbook'),
      'title' => __('<h2 class="bibcategory">Book Chapters</h2>')
    ),
  // Journal / Bookchapters
    array(
      'query' => array(Q_TYPE=>'article'),
      'title' => __('<h2 class="bibcategory">Refereed Articles</h2>')
    ),
  // conference papers
    array(
      'query' => array(Q_TYPE=>'inproceedings|conference',Q_EXCLUDE=>'workshop'),
      'title' => __('<h2 class="bibcategory">Refereed Conference Papers</h2>')
    ),
  // workshop papers
    array(
      'query' => array(Q_TYPE=>'inproceedings',Q_SEARCH=>'workshop'),
      'title' => __('<h2 class="bibcategory">Refereed Workshop Papers</h2>')
    ),
  // Theses
    array(
      'query' => array(Q_TYPE=>'phdthesis|mastersthesis'),
      'title' => __('<h2 class="bibcategory">Dissertations</h2>')
    ),
  // TRs
    array(
      'query' => array(Q_TYPE=>'misc|techreport'),
      'title' => __('<h2 class="bibcategory">Technical reports</h2>')
    )
  );
}
?>