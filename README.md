## Table of Contents
1. [General Info](#general-info)
2. [Example Site](#le-Monde.fr)
3. [Technologies](#technologies)
3. [Installation](#installation)
4. [Sécurity](#protocol-in-place)

### General Info
***
Create a showcase site based on a CMS by responding to customer demand.
you have to :
write the specifications
design the wireframe model
propose examples of sites corresponding to the customer's request
make the CMS template
deploy and secure the site on a server
### Example site
![le Monde](https://www.lemonde.fr/)
## Technologies
***
A list of technologies used within the project:
* [HTML5 (WORDPRESS)](https://wordpress.org/): Version 5.7.2 
* [CSS3 BOOTSTRAP](https://getbootstrap.com/2.3.2/): v2.3.2
## Installation
***
A little intro about the installation. 
```
1 : get the theme folder called "lepays" on the git:https://github.com/tamatabenebig/lepays
2 : copy it to wordpress: wp-content / themes
3 : open wordpress on the browser of your choice is activated the theme installed
5 : create the sport is culture categories in the website dashboard
6 : always in the dashboard search in the extension tab the "fakerpress" plugin to create content is thus to have an overview of the position of the articles
```
## Security
***
secure the site by protecting access to the .htaccess folder :
# Disable the display of directory content
Options All -Indexes
# Alternative to prevent directory listing
IndexIgnore *
# Hide server information
ServerSignature Off
# Hide server information
Options +FollowSymLinks
# Enabling symbolic link tracking
Options +FollowSymLinks
# Choice of time zone
SetEnv TZ Europe/Paris
# Default encoding of text and HTML files
AddDefaultCharset UTF-8
# Protect the wp-config.php file
<files wp-config.php>
order allow,deny
deny from all
</files>

# Protect .htaccess and .htpasswds files
<Files ~ "^.*\.([Hh][Tt][AaPp])">
order allow,deny
deny from all
satisfy all
</Files>

#   l e p a y s  
 