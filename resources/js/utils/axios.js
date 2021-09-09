export const instance = axios.create({
    baseURL: `${APP_URL}`,
    headers: {
        'Content-Type': 'application/json',
    },
});
