@echo off

for %%f in (*.jpg) do (
	%x=%x+1
	ren %%f.jpg %%x.jpg
)

:end