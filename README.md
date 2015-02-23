# blackboard_gallery
A lightweigth gallery script in php for presenting blackboard photographs to students

uses lightbox to display the photos..

## how to use
create a folder in /galleries, containing the lecture.
there create a subfolder with the date for a subgallery

folders and photos will automatically be ordered by name, so use a sensible date format like yyyy-mm-dd

its possible to add a comment in each folder. create a filename `comments.txt` and use html syntax.

example:

```
/galleries
  /phy111
    /2015-01-01
      img1.jpg
      img2.jpg
      img3.jpg
    /2015-01-02
      img1.jpg
  /phy121
    /2015-09-01
      img1.jpg
      ...
