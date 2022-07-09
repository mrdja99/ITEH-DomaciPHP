let sortBtn = document.getElementById("sort-btn");
let tbody = document.getElementById('tbody');

let searchBox = document.getElementById('search-box');

sortBtn.addEventListener('click', (event) => {
  searchBox.value = "";

  $.ajax({
    url: 'sort.php',
    type: 'POST',
    data: {
      sortType: "title",
    },
    success: (response) => {
      let comics = JSON.parse(response);
      let html = "";

      comics.forEach((comic) => {
        if (comic.user_id == 0) {
          html += `<tr>
                    <td>${comic.comic_name}</td>
                    <td>${comic.writer}</td>
                    <td>${comic.genre}</td>
                    <td>${comic.edition}</td>
                    <td>
                      <form method="POST">
                        <button type="submit" class="btn" name="pick">Izaberi</button>
                        <input type="hidden" name="comic_id" value="${comic.comic_id}">
                      </form>
                    </td>
                  </tr>`;
        }

        tbody.innerHTML = html;
      });
    }
  });
});


searchBox.addEventListener('keyup', (event) => {
  let text = searchBox.value;

  $.ajax({
    url: 'search.php',
    type: 'POST',
    data: {
      search: text,
    },
    success: (response) => {
      let comics = JSON.parse(response);
      let html = "";

      comics.forEach((comic) => {
        if (comic.user_id == 0) {
          html += `<tr>
                    <td>${comic.comic_name}</td>
                    <td>${comic.writer}</td>
                    <td>${comic.genre}</td>
                    <td>${comic.edition}</td>
                    <td>
                      <form method="POST">
                        <button type="submit" class="btn" name="pick">Izaberi</button>
                        <input type="hidden" name="comic_id" value="${comic.comic_id}">
                      </form>
                    </td>
                  </tr>`;
        }
      });

      tbody.innerHTML = html;
    }
  });

});