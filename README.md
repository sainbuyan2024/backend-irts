```

git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/sainbuyan2024/backend-irts.git
git push -u origin main

```



1. Эхлээд git дээрээ хоосон repository  үүсгэнэ.


2. git -ийг шинээр үүсгэх команд. Ингэснээр git -тэй ажиллах боломж үүснэ

```
git init
```

3. git  үүссэн эсэхийг шалгах. Энэ үйлдлийг байна хийж төлөвүүдийн харж болно.

```
git status
```

4. Үндсэн прожектийг завсрын санах ой руу оруулна. Жишээ нь доорх код нь бүх файлуудыг завсрын санах ой руу оруулах үйлдэл

```
git add .

git status
```

5. git рүү оруулахдаа comment бичиж оруулдаг. 

```
git commit -m"Тайлбар"

git status
```

6. Хэрвээ branch-ийг солих гэж байгаа бол дараах командыг өгнө. Үндсэн branch  нь голдуу main байдаг

```
git branch -M main
```

7. git-ийн тохиргоо хийж өгөх
    * Тохиргоог харахдаа ```git config --list ```
    * Тохиргооны мэдээллээс гарахдаа "Q" үсэг дээр дарж гарна.
    * Өөрчлөлт хийх хэрэглэгчийн нэрийг тохируулах 
    ``` git config --global user.name "FIRST_NAME LAST_NAME" ```
    * Өөрчлөлт хийх хэрэглэгчийн и-мэйл тохируулах ``` git config --global user.email "MY_NAME@example.com"```
    * github-тай холбох ```  git remote add origin https://github.com/sainbuyan2024/backend-irts.git ```

8. Өгөгдлийг github руу хуулах үйлдэл

```
git push -u origin main
```
