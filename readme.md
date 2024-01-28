!['Theme One'](https://github.com/dr-explorer/theme-one/blob/main/theme-one.png)

## WordPress starter theme for designers/developers who are new to WordPress ##

This is the starter theme I would have loved to come across when I was myself learning WordPress. It is the ideal starter for developers who want to write their own CSS and PHP, and only need the WordPress basics to get going. It provides everything that is essential (including action hooks and the Loop), while **excluding** everything that isn't.

If you are:
- a designer/developer,
- at home with CSS and familiar with PHP, who
- dislikes Gutenberg and
- does not want to have to adapt / cut out / edit another developer's code,

this is for you.

### Setup ###
1. Clone the repository or download the zip.

2. In *style.css*, change the name, author, author URI and "text domain". The copyright declaration in *footer.php* will automatically reflect your changes. A minute's work and it's your own.

### Make it 100% your own ###
**Theme One** works as a theme, without any editing. To make it shine in your way, define your own layouts, palettes, fonts, graphics, etc., in *style.css*.

Just as it is, the theme provides a working *functions.php*, also a working *header.php*, *index.php*, and *footer.php*. The working CSS file, *style.css*, has a comment header, but not a single line of CSS—until you yourself write one.

Start with *style.css*. Glance at *functions.php* and see if you want to add one of the suggested extras. Glory in the results.

Then move on to the **extra template files supplied**, in the 'starter-templates' folder.

### Standard extra template files ###
1. If your site will have more than one page: *page.php, front-page.php, home.php* ('front-page' will override 'home', unless the site administrator knows what they are doing)
2. To provide a search facility: *search.php* (for search results)
3. To respond to visitor mistakes: *404.php*
4. If you want to provide a widget area: *sidebar.php* (misleading name)
5. If your site will have a blog: *archive.php, comments.php, single.php*
6. If your site is a dedicated blog site: *author.php, date.php, home.php*
7. If your site will use categories and/or tags: *category.php, tag.php*
8. If your site will use a custom taxonomy: *taxonomy.php*

**Theme One** provides starter versions of *404.php, archive.php, comments.php, front-page.php, home.php, page.php, search.php, sidebar.php* and *single.php*. All of these templates work as they are. Have fun promoting them one by one (tweaking the code if you happen to feel like it), and integrating them into your theme.
