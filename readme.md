# Theme One #

## WordPress starter theme for experienced designers/developers who are new to WordPress ##

This is the starter theme I would have loved to come across when I was myself learning WordPress. It is the ideal starter for experienced developers who want to write their own CSS and PHP, and only need the WordPress basics to get going. It provides everything that is essential (including action hooks and the Loop), while excluding **everything** that isn't.

If you are:
- a developer/designer,
- at home with both PHP and CSS, who
- dislikes Gutenberg and
- does not want to have to adapt / cut out / edit another developer's code,

this is for you.

**Theme One** works as a theme, without any editing. (Obviously, it relies on browser defaults to be readable at all. It needs **your layouts, palettes, fonts, graphics, etc.** to becopme a real theme.)

The only thing you will need to change is the name (and "text domain") of the theme, in *style.css*, and the copyright declaration in *footer.php*. Two minutes' work and it's your own, straightaway.

Just as it is, it provides a working *functions.php*, also a working *header.php*, *index.php*, and *footer.php*. The established HTML5 names are used for page divsions. Many other starter templates are provided in a subordinate folder, which you can work on once you are ready to promote them to the theme's main folder. The CSS file (required by WordPress) has a comment header, but not a single line of CSS—until you yourself write one.

Which should be your first job—maybe along with coding one or two new functions in *functions.php* (hints are provided). Then move on to one or more of the extra templates.

### Standard extra template files ###
1. If your site will have more than one page: *page.php, front-page.php, home.php*
2. If you want to provide a search facility: *search.php* (for search results), *404.php* (can also be used for mistyping. etc.)
3. If you want to provide a widget area: *sidebar.php* (misleading name)
4. If your site will have a blog: *archive.php, comments.php, single.php*
5. If your site is a dedicated blog site: *author.php, date.php, home.php*
6. If your site will use categories and/or tags: *category.php, tag.php*
7. If your site will use a custom taxonomy: *taxonomy.php*

**Theme One** provides starter versions of *404.php, archive.php, comments.php, front-page.php, home.php, page.php, search.php, sidebar.php* and *single.php*. All of these templates work as they are, in their limited way, but your best bet is probably to promote them one by one, and integrate them into your theme, once you have established your theme's style and basic functions.
