# 🧠 BrainClone

This is a web app project that aims to clone ChatGPT, a large language model trained by OpenAI. The app allows users to input a prompt and receive a response generated by the model.

## Technologies Used

- Laravel
- HTML/CSS/JavaScript
- OpenAI API

## Installation

1. Clone the repository: `git clone https://github.com/Yaten/BrainClone.git`
2. Navigate to the project directory: `cd BrainClone`
3. Install the required packages: `composer install`
4. Set up the OpenAI API key by following the instructions in the [OpenAI documentation](https://beta.openai.com/docs/quickstart).
5. Copy the `.env.example` file and rename it to `.env`: `cp .env.example .env`
6. Edit the `.env` file and add your OpenAI API key as follows: `OPENAI_API_KEY=your-api-key-here`
7. Generate an application key: `php artisan key:generate`
8. Start the server: `php artisan serve`
9. Open a web browser and navigate to `http://localhost:8000`.

### Option 2: Run with Docker Compose

1. Clone the repository: `git clone https://github.com/Yaten/BrainClone.git`
2. Navigate to the project directory: `cd BrainClone`
3. Set up the OpenAI API key by following the instructions in the [OpenAI documentation](https://beta.openai.com/docs/quickstart).
4. Copy the `.env.example` file and rename it to `.env`: `cp .env.example .env`
5. Edit the `.env` file and add your OpenAI API key as follows: `OPENAI_API_KEY=your-api-key-here`
6. Build and start the Docker containers: `docker-compose up --build`
7. Open a web browser and navigate to `http://localhost:8000`.

## Usage

1. Enter a prompt in the input field.
2. Click enter
3. Wait for the response to appear in the output field.
4. Use reset button to start a new chat.

## Demo
![BrainClone in action](/brainclone_ss.png "BrainClone")

## Contributing

Contributions are welcome! If you find a bug or have an idea for an improvement, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
