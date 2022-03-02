# HTML Exercises

## 1. Online Newspaper

Using **HTML 5 only**, create a prototype of an online newspaper:

- Do not worry about design; although HTML is a markup language with *pre-defined presentation semantics*, most of the design is handled by CSS (more on this next week).
- [Validate](https://validator.w3.org/) and verify the result on the browser as you proceed.

**Some tips and ideas:**

- Use the site <http://www.lipsum.com/> if you need to generate example paragraphs.
- Use the site <https://picsum.photos/> if you need some example photos.

**Instructions:**

1. Create separate sections for the *header*, *menu*, and *body* of the newspaper. Use the most appropriate [section elements](https://web.fe.up.pt/~arestivo/slides/?s=html5#sections) for those sections: *header*, *footer*, *nav*, *main*, *article*, and *section*.
2. The header should have a title (*h1*), a subtitle (*h2*), and a logo (*img*).
3. The menu should have links to each newspaper section (sports, politics, …).
    - These should be organized using an [unordered list](https://web.fe.up.pt/~arestivo/slides/?s=html5#lists) (*ul*).
    - And can point to example URLs.
4. The newspaper body should have a section for each news item.
    - Use the [section elements](https://web.fe.up.pt/~arestivo/slides/?s=html5#sections) *article*.
5. A news item should have a title (*h3*), some [paragraphs](https://web.fe.up.pt/~arestivo/slides/?s=html5#content) (*p*), and an [image](https://web.fe.up.pt/~arestivo/slides/?s=html5#content) (*img*).
    - It should also have a footer containing the author's name and date.
    - Try using *header* and *footer* tags.
6. Don't forget to [validate](https://validator.w3.org/) the page when you're done.

**What did I learn:**

- The basics of HTML documents.
- The usage of section tags.
- How to validate an HTML page.
- HTML is not for design!

## 2. Complex Table

Using **HTML 5 only**, create a document representing the following [table](https://web.fe.up.pt/~arestivo/slides/?s=html5#tables).

![A complex html table](table.png)

As we still don't know CSS, let's use the attribute border= "1" to visualize the result better:

```html
<table border="1">
  <tr>...</tr>
  ...
</table>
```

**Tip:** The easiest way to implement complex tables in HTML is to think about the table row by row. This table has **6 rows**.

**When you are finished:**

1. [Validate](https://validator.w3.org/) the HTML code.
2. Include a [valid HTML 5 icon](https://www.google.com/search?tbm=isch&as_q=html5+valid+icon&tbs=isz:lt) on the webpage.
3. Revalidate the document.

**What did I learn:**

- How to create a complex HTML table.
- Tables are for presenting tabular data, not for design!

## 3. Form

1. Create a web page containing a form where users should input the following data:
    - Name (text)
    - Age (radio buttons with options "<18", "19-35", "36-48" and ">49"))
    - Profession (text)
    - Country (a dropdown box – add some countries)
    - Interests (a list where user can select several – make up some choices)
    - How did the user found out about the site (larger text field)
2. The form should also have a submit button.
3. Each field should have a label.
4. Validate the page when you are finished.
5. Try to submit the form and verify what happens in the URL bar using POST and GET as the form methods.

**What did I learn:**

- How to create an HTML form.
- How to use labels to improve accessibility.
- How to use character entities.
- The difference between "GET" and "POST" action in forms (more about this later).
