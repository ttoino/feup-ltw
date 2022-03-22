# CSS Exercises

## 1. Online Newspaper Design

- Unzip the following file into some folder: [news.zip](https://web.fe.up.pt/~arestivo/page/exercises/css/news/news.zip)
- You should have now 4 files: **index.html** (the main page of an online newspaper), **item.html** (a page representing a single article with comments), **register.html** and **login.html** (pages for users to register and login).
- Analyze the structure of these files.
- As you might have noticed, all pages reference 5 css files: **style.css** (styling the main components), **layout.css** (positioning the main components), **responsive.css** (making the page responsive), **comments.css** (design for the comments section) and **register.css** (design for the login and register forms).
- **Without changing** the HTML files, try recreating a design by following these **five** steps:

### 1.1 Main Style

We will start by designing the main components of the main page without worrying about the positioning of any elements (**style.css**). The final result should be [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/style.html).

**Take notice that:**

- The green background is **not** part of the design. The site should occupy the whole width of the browser.
- It's not noticeable on the screenshot, but section links should change their background color to ![#2A2F33](https://via.placeholder.com/12/2A2F33/000000?text=+) `#2A2F33` and their text color to white when the mouse is over them.

**Some helper values:**

- Main colors used: ![#2A2F33](https://via.placeholder.com/12/2A2F33/000000?text=+) `#2A2F33`, ![#046DD5](https://via.placeholder.com/12/046DD5/000000?text=+) `#046DD5` and ![#F4655F](https://via.placeholder.com/12/F4655F/000000?text=+) `#F4655F`.
- Section colors: ![#E1493E](https://via.placeholder.com/12/E1493E/000000?text=+) `#E1493E`, ![#8ABA56](https://via.placeholder.com/12/8ABA56/000000?text=+) `#8ABA56`, ![#5B4282](https://via.placeholder.com/12/5B4282/000000?text=+) `#5B4282`, ![#FF8932](https://via.placeholder.com/12/FF8932/000000?text=+) `#FF8932`, ![#19B6E9](https://via.placeholder.com/12/19B6E9/000000?text=+) `#19B6E9` and ![#E84C8B](https://via.placeholder.com/12/E84C8B/000000?text=+) `#E84C8B`.
- Fonts used: [Lora](https://fonts.google.com/specimen/Lora) and [Poppins](https://fonts.google.com/specimen/Poppins).
- Most paddings and margins are *1em*.

**Info:** Lora and Poppins are not web-safe fonts; most people won't have them installed in their browsers. But we can still use them by adding this line into our CSS file thanks to [Google Fonts](https://fonts.google.com/)

```css
@import url('https://fonts.googleapis.com/css?family=Lora:400,700|Poppins:300,200');
```

**Info:** You may have noticed that the *nav* section contains an *input* and a *label*.
These are just to be used in *exercise 1.3*. You can start by hiding them using CSS for now

**What did I learn:**

- How to use **CSS selectors** to select specific parts of an HTML file for styling.
- How to apply **basic styling** to HTML elements.
- How to **import fonts** so that we can use more than the web-safe fonts.
- How to use **pseudo-classes** to select elements based on an element state.
- How to **hide** elements using CSS.

### 1.2 Positioning

We will position the elements in their proper places (**layout.css**).
The final result should be [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/layout.html).

**Some helper values:**

- The background color is ![#EDEFF0](https://via.placeholder.com/12/EDEFF0/000000?text=+) `#EDEFF0`.
- The width of the page is *60em*.
- The sidebar occupies 1/5 of the total width.

**Tip:** Use a *flexbox* for the menu and a *grid* to position the elements on the page.

**What did I learn:**

- How to use **CSS grids** to position elements in a webpage.
- How to use **CSS flexboxes** to position elements in a container.

### 1.3 Responsive Design

Now we make the design responsive by establishing two breaking points (**responsive.css**):

- When the width of the window reaches **60em**, the sidebar should disappear and the page should occupy the full width (*100%*) of the window. The final result should be [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/tablet.html).
- When the width of the window reaches **30em**, the menu should collapse into a pull-down menu, the subtitle should not be shown and each news item title should be moved to above the item image. The final result should be [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/phone.html).

**Some helper values:**

- Characters for the hamburger menu: *\2630* (☰) and *\2715* (✕).

**Tip:** Start by making the menu without any animations (using display to hide and show the menu items). After that, try using *transitions* to change the height of each menu item instead.

**What did I learn:**

- How to use **media queries** to specify CSS rules for specific screen widths.
- How to use a **hidden checkbox** to save state in CSS.
- How to **add content** to elements using the after pseudo-element.
- How to **transitions** to create smooth animations in CSS.

### 1.4 Comments Design

Add CSS rules (**comments.css**) to create the design for the comment section that can be seen on the **item.html** page. The final result should be [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/comments.html).

**Some helper values:**

- Quote character for each comment: *\201C* (“).

**Tip:** Use a *grid* for the comment *form* design.

**What did I learn:**

- How to use **grids** to design forms.

### 1.5 Register Design

Add CSS rules (**register.css**) to create the design for the register and login forms that can be seen in the **register.html** and **login.html** pages. The final result should be [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/register.html).

Make sure that the form fills the content area in smaller screens like [this](https://web.fe.up.pt/~arestivo/page/exercises/css/news/register-phone.html).

**What did I learn:**

- How to use **grids** to design forms.
- How to use generic selectors to not repeat myself.

## 2. No Flexbox/Grid Design

**Without** using the *flexbox* and *grid* CSS layouts, try to recreate some designs.

- Unzip the following file into some folder: [blocks.zip](https://web.fe.up.pt/~arestivo/page/exercises/css/blocks/blocks.zip).
- Inside the *zip* you will find an *index.html* file and a *base.css* file. These have the structure of the website and some base design. You should not change these files.
- Try to recreate each one of the following designs, without using *flexbox* or *grid*, inside the *style.css* file:
  - [Style 1](https://web.fe.up.pt/~arestivo/page/exercises/css/blocks/style1.html)
  - [Style 2](https://web.fe.up.pt/~arestivo/page/exercises/css/blocks/style2.html)
  - [Style 3](https://web.fe.up.pt/~arestivo/page/exercises/css/blocks/style3.html)
  - [Style 4](https://web.fe.up.pt/~arestivo/page/exercises/css/blocks/style4.html)

**Extra:** Now try the same exercises, this time **using** flexbox and grid layouts.

**What did I learn:**

- How to position, float and clear to create complex CSS designs.
- How much easier it is to use grid and flexbox.

## 3. Cascading

Consider the following HTML code:

```html
<section id="foo">
  <ul class="bar">
    <li class="first"><a href="#">A</a></li>
    <li class="second"><a href="#">B</a></li>
    <li><a href="#">C</a></li>
    <li><a href="#">D</a></li>
  </ul>
</section>
```

And the following CSS rules:

```css
section ul li               { color : green }    /* R1 (0, 0, 3) */
.bar .second                { color : red }      /* R2 (0, 2, 0) */
li a                        { color : cyan }     /* R3 (0, 0, 2) */
section li:first-child ~ li { color : yellow }   /* R4 (0, 1, 3) */
#foo .bar li :first-child   { color : inherit }  /* R5 (1, 2, 1) */
.bar li                     { color : magenta }  /* R6 (0, 1, 1) */
```

During this exercise, **don't try this code in the browser** until the end.

### 3.1 Specificity

1. Without using a specificity calculator, calculate the specificity of each rule.
2. **In the end**, [verify](https://specificity.keegan.st/) if you got it right.

### 3.2 Rules

What rules apply to each of the elements:

1. section with id foo: None
2. ul with class bar: None
3. first list item: R1, R6
4. second list item: R1, R2, R4, R6
5. third list item: R1, R4, R6
6. fourth list item: R1, R4, R6

### 3.3 Selected Rule

What is the rule with the highest specificity for each element:

1. section with id foo: None
2. ul with class bar: None
3. first list item: R6
4. second list item: R2
5. third list item: R4
6. fourth list item: R4
7. first link: R5
8. second link: R5
9. third link: R5
10. fourth link: R5

### 3.4 Color Value

What is the color value (including inherit) assigned to each element:

1. section with id foo: inherit
2. ul with class bar: inherit
3. first list item: magenta
4. second list item: red
5. third list item: yellow
6. fourth list item: yellow
7. first link: inherit
8. second link: inherit
9. third link: inherit
10. fourth link: inherit

### 3.5 Final Color

What is the **final color value** presented in the browser:

1. first link: magenta
2. second link: red
3. third link: yellow
4. fourth link: yellow

### 4. Extra

Let's continue exercise [5. Extra](/html#5-extra):

1. Pick a page from a website you use a lot.
2. Without looking at its HTML code, try writing your own version using good HTML semantics.
3. [Validate](https://validator.w3.org/) the HTML code.
4. Using CSS, create a design for that page.
5. Make sure the design works in devices of different sizes.
6. [Validate](https://jigsaw.w3.org/css-validator/) your CSS code.
