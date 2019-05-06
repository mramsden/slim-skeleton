@echo off
docker run --rm --interactive --tty --volume "%cd%:/app" -w /app composer %*