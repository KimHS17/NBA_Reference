const sendit = () => {
  // Input들을 각각 변수에 대입
  const username = document.regiform.username;
  const userpw = document.regiform.password;

  // userid값이 4자 이상 12자 이하를 벗어나면 실행.
  if (username.value.length < 4 || username.value.length > 12) {
    alert("아이디는 4자 이상 12자 이하로 입력해주세요.");
    username.focus();
    return false;
  }
  // userpw값이 6자 이상 20자 이하를 벗어나면 실행.
  if (userpw.value.length < 6 || userpw.value.length > 20) {
    alert("비밀번호는 6자 이상 20자 이하로 입력해주세요.");
    userpw.focus();
    return false;
  }
  // 유효성 검사 정상 통과 시 true 리턴 후 form 제출.
  return true;
};
