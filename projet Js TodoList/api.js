const crudfulConfig = {
  headers: {
    cfAccessKey: "771952a48299f00a02a82b46a34f3d19b261aecb",
  },
};

export const getTasks = (listId) =>
  axios
    .get(
      `https://todo.crudful.com/tasks?listId=${listId}`,
      crudfulConfig
    )
    .then((result) => result.data.results);

export const setTaskIsCompleted = (taskId, isCompleted) =>
  axios.patch(
    `https://todo.crudful.com/tasks/${taskId}`,
    { isCompleted: isCompleted },
    crudfulConfig
  );

export const deleteTask = (taskId) =>
  axios.delete(
    `https://todo.crudful.com/tasks/${taskId}`,
    crudfulConfig
  );

export const createTask = (title, details, due, listId, color) =>
  axios.post(
    "https://todo.crudful.com/tasks",
    { title: title, details: details, due: due, listId: listId, color: color},
    crudfulConfig
  );

export const getLists = () =>
  axios
    .get("https://todo.crudful.com/lists", crudfulConfig)
    .then((result) => result.data.results);

export const deleteList = (listId) =>
  axios.delete(
    `https://todo.crudful.com/lists/${listId}`,
    crudfulConfig
  );

export const createList = (title, color) =>
  axios.post(
    "https://todo.crudful.com/lists",
    { title: title, color: color},
    crudfulConfig
  );
